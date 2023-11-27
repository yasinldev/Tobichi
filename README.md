# Tobichi Programming Language

Tobichi is a programming language that is designed to be easy to learn and use. It is a low-level language that is designed to be compiled to machine code. It is designed to be a general-purpose language that can be used for a wide variety of applications.

## Features

Tobichi is in development and is not yet ready for use. The following features are planned for the first release:

- [x] Lexer
- [/] Parser (in progress)
- [ ] Compiler
- [ ] Standard Library
- [ ] Documentation
- [ ] Tests
- [ ] Examples

## Planned Syntax

The following is the planned syntax for the first release of Tobichi:

### Creating Variables

```tobichi
(string)variable = "Hello, World!";
(int)variable = 123;
(float)variable = 123.456;
(bool)variable = true;
(char)variable = 'a';

mutable (string)variable = "Hello, World!";

(string)refVar(&(variable));
```

### Creating Functions

```tobichi
fn hello_world() -> (string) {
    ret "Hello, World!";
}

fn example_fn((int)variable_1, (int)variable_2) -> (int) {
    ret variable_1 + variable_2;
}

fn example_fn((int)refVar(&(variable)), (int)variable_2) -> (int) {
    ret variable_1 + variable_2;
}
```

### Creating Structs

```tobichi

struct example_struct {
    (int)variable_1;
    (int)variable_2;
}

```

### Creating Enums

```tobichi

enum example_enum {
    (int)variable_1;
    (int)variable_2;
}

```
