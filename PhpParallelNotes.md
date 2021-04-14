# PHP Parallel
## Components:
### Task
A task is a [Closure](#Closure) intended for parallel execution.
#### Closure:
A closure is used to represent an anonymous function.  
Anonymous functions are bits of code that kind of work like classes but not really.  
### Future
A future is used to access the return value from a parallel task.
### Channel
A channel allows for communication to and from a task through the use of a [future](#future). However it does not allow bi-directional communication (?).  
A channel acts as a socket-like link between tasks.
### Events
I mean, they're events what did you expect?