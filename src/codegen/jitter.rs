use std::ffi::CString;
use libc::{c_char, c_uint, size_t};
use llvm_sys::prelude::*;
use llvm_sys::core::*;
use llvm_sys::execution_engine::*;
use llvm_sys::target_machine::*;
use llvm_sys::execution_engine::LLVMMCJITCompilerOptions;

pub struct FrozenModule {
    module: LLVMModuleRef,
}

impl FrozenModule {
    pub fn get(&self) -> LLVMModuleRef {
        self.module
    }
}

pub struct ExecutionEngine {
    ee: LLVMExecutionEngineRef,
}

impl ExecutionEngine {
    pub fn new(mut module: LLVMModuleRef) -> Result<(ExecutionEngine, FrozenModule), String> {
        let mut ee = std::ptr::null_mut();
        let mut error = std::ptr::null_mut();
        unsafe {
            if LLVMCreateExecutionEngineForModule(&mut ee, module, &mut error) != 0 {
                let error_msg = CString::from_raw(error).to_string_lossy().into_owned();
                LLVMDisposeMessage(error);
                return Err(error_msg);
            }
        }

        Ok((ExecutionEngine { ee }, FrozenModule { module }))
    }

    pub fn new_interpreter(mut module: LLVMModuleRef) -> Result<(ExecutionEngine, FrozenModule), String> {
        let mut ee = std::ptr::null_mut();
        let mut error = std::ptr::null_mut();
        unsafe {
            if LLVMCreateInterpreterForModule(&mut ee, module, &mut error) != 0 {
                let error_msg = CString::from_raw(error).to_string_lossy().into_owned();
                LLVMDisposeMessage(error);
                return Err(error_msg);
            }
        }

        Ok((ExecutionEngine { ee }, FrozenModule { module }))
    }

    pub fn new_jit_compiler(
        mut module: LLVMModuleRef,
        opt_level: u32,
    ) -> Result<(ExecutionEngine, FrozenModule), String> {
        let mut ee = std::ptr::null_mut();
        let mut error = std::ptr::null_mut();
        unsafe {
            if LLVMCreateJITCompilerForModule(&mut ee, module, opt_level, &mut error) != 0 {
                let error_msg = CString::from_raw(error).to_string_lossy().into_owned();
                LLVMDisposeMessage(error);
                return Err(error_msg);
            }
        }

        Ok((ExecutionEngine { ee }, FrozenModule { module }))
    }

    pub fn add_module(&mut self, module: LLVMModuleRef) -> FrozenModule {
        unsafe {
            LLVMAddModule(self.to_ref(), module);
        }
        FrozenModule { module }
    }

    pub fn remove_module(&mut self, module: FrozenModule) -> Result<LLVMModuleRef, String> {
        let mut error = std::ptr::null_mut();
        let mut module_ref = std::ptr::null_mut();
        unsafe {
            if LLVMRemoveModule(self.to_ref(), module.get(), &mut module_ref, &mut error) != 0 {
                let error_msg = CString::from_raw(error).to_string_lossy().into_owned();
                LLVMDisposeMessage(error);
                return Err(error_msg);
            }
        }
        Ok(module_ref)
    }

    pub fn run_static_constructors(&self) {
        unsafe {
            LLVMRunStaticConstructors(self.to_ref());
        }
    }

    pub fn run_static_destructors(&self) {
        unsafe {
            LLVMRunStaticDestructors(self.to_ref());
        }
    }

    pub fn run_function(&self, f: LLVMValueRef, args: &mut [LLVMGenericValueRef]) -> LLVMGenericValueRef {
        unsafe {
            LLVMRunFunction(self.to_ref(), f, args.len() as c_uint, args.as_mut_ptr())
        }
    }

    pub fn get_function_address(&self, name: &str) -> u64 {
        let name = CString::new(name).unwrap();
        unsafe {
            LLVMGetFunctionAddress(self.to_ref(), name.as_ptr() as *const c_char)
        }
    }

    pub fn find_function(&self, name: &str) -> Option<LLVMValueRef> {
        let name = CString::new(name).unwrap();
        let mut f = std::ptr::null_mut();
        unsafe {
            if LLVMFindFunction(self.to_ref(), name.as_ptr() as *const c_char, &mut f) != 0 {
                None
            } else {
                Some(f)
            }
        }
    }
}

impl ExecutionEngine {
    pub fn to_ref(&self) -> LLVMExecutionEngineRef {
        self.ee
    }
}

impl Drop for ExecutionEngine {
    fn drop(&mut self) {
        unsafe {
            LLVMDisposeExecutionEngine(self.to_ref());
        }
    }
}

pub struct MCJITBuilder {
    options: LLVMMCJITCompilerOptions,
}

impl MCJITBuilder {
    pub fn new() -> MCJITBuilder {
        let mut options: LLVMMCJITCompilerOptions = unsafe { std::mem::zeroed() };
        unsafe {
            LLVMInitializeMCJITCompilerOptions(
                &mut options,
                std::mem::size_of::<LLVMMCJITCompilerOptions>() as size_t,
            );
        }

        MCJITBuilder { options }
    }

    pub fn set_opt_level(mut self, opt_level: u32) -> Self {
        self.options.OptLevel = opt_level;
        self
    }

    pub fn set_code_model(mut self, code_model: LLVMCodeModel) -> Self {
        self.options.CodeModel = code_model;
        self
    }

    pub fn no_frame_pointer_elim(mut self) -> Self {
        self.options.NoFramePointerElim = 1;
        self
    }

    pub fn enable_fast_isel(mut self) -> Self {
        self.options.EnableFastISel = 1;
        self
    }

    pub fn create(mut self, module: LLVMModuleRef) -> Result<(ExecutionEngine, FrozenModule), String> {
        let mut ee = std::ptr::null_mut();
        let mut error = std::ptr::null_mut();
        unsafe {
            if LLVMCreateMCJITCompilerForModule(
                &mut ee,
                module,
                &mut self.options,
                std::mem::size_of::<LLVMMCJITCompilerOptions>() as size_t,
                &mut error,
            ) != 0
            {
                let error_msg = CString::from_raw(error).to_string_lossy().into_owned();
                LLVMDisposeMessage(error);
                return Err(error_msg);
            }
        }

        Ok((ExecutionEngine { ee }, FrozenModule { module }))
    }
}

pub fn link_in_mcjit() {
    unsafe {
        LLVMLinkInMCJIT();
    }
}

pub fn link_in_interpreter() {
    unsafe {
        LLVMLinkInInterpreter();
    }
}
