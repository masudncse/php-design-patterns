# Design Patterns In PHP

[![Build Status](https://github.com/domnikl/DesignPatternsPHP/workflows/CI/badge.svg)](https://github.com/domnikl/DesignPatternsPHP/actions)
[![Donate](https://img.shields.io/badge/donate-paypal-blue.svg?style=flat-square)](https://paypal.me/DominikLiebler)

[Read the Docs of DesignPatternsPHP](http://designpatternsphp.readthedocs.org)
or [Download as PDF/Epub](https://readthedocs.org/projects/designpatternsphp/downloads/)

This is a collection of known design patterns and some sample codes on how to implement them in PHP. Every pattern has a small list of examples.

I think the problem with patterns is that often people do know them but don't know when to apply which.

## Installation
You should look at and run the tests to see what happens in the example.
To do this, you should install dependencies with `Composer` first:

```bash
$ composer install
```

Read more about how to install and use `Composer` on your local machine [here](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

## Patterns

The patterns can be structured in roughly three different categories. Please click on the [:notebook:](http://en.wikipedia.org/wiki/Software_design_pattern) for a full explanation of the pattern on Wikipedia.

### [Creational](Creational)

* [AbstractFactory](Creational/AbstractFactory) [:notebook:](http://en.wikipedia.org/wiki/Abstract_factory_pattern)
* [Builder](Creational/Builder) [:notebook:](http://en.wikipedia.org/wiki/Builder_pattern)
* [FactoryMethod](Creational/FactoryMethod) [:notebook:](http://en.wikipedia.org/wiki/Factory_method_pattern)
* [Pool](Creational/Pool) [:notebook:](http://en.wikipedia.org/wiki/Object_pool_pattern)
* [Prototype](Creational/Prototype) [:notebook:](http://en.wikipedia.org/wiki/Prototype_pattern)
* [SimpleFactory](Creational/SimpleFactory)
* [Singleton](Creational/Singleton) [:notebook:](http://en.wikipedia.org/wiki/Singleton_pattern)
* [StaticFactory](Creational/StaticFactory)

### [Structural](Structural)

* [Adapter](Structural/Adapter) [:notebook:](http://en.wikipedia.org/wiki/Adapter_pattern)
* [Bridge](Structural/Bridge) [:notebook:](http://en.wikipedia.org/wiki/Bridge_pattern)
* [Composite](Structural/Composite) [:notebook:](http://en.wikipedia.org/wiki/Composite_pattern)
* [DataMapper](Structural/DataMapper) [:notebook:](http://en.wikipedia.org/wiki/Data_mapper_pattern)
* [Decorator](Structural/Decorator) [:notebook:](http://en.wikipedia.org/wiki/Decorator_pattern)
* [DependencyInjection](Structural/DependencyInjection) [:notebook:](http://en.wikipedia.org/wiki/Dependency_injection)
* [Facade](Structural/Facade) [:notebook:](http://en.wikipedia.org/wiki/Facade_pattern)
* [FluentInterface](Structural/FluentInterface) [:notebook:](http://en.wikipedia.org/wiki/Fluent_interface)
* [Flyweight](Structural/Flyweight) [:notebook:](https://en.wikipedia.org/wiki/Flyweight_pattern)
* [Proxy](Structural/Proxy) [:notebook:](http://en.wikipedia.org/wiki/Proxy_pattern)
* [Registry](Structural/Registry) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)

### [Behavioral](Behavioral)

* [ChainOfResponsibilities](Behavioral/ChainOfResponsibilities) [:notebook:](http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern)
* [Command](Behavioral/Command) [:notebook:](http://en.wikipedia.org/wiki/Command_pattern)
* [Interpreter](Behavioral/Interpreter) [:notebook:](https://en.wikipedia.org/wiki/Interpreter_pattern)  
* [Iterator](Behavioral/Iterator) [:notebook:](http://en.wikipedia.org/wiki/Iterator_pattern)
* [Mediator](Behavioral/Mediator) [:notebook:](http://en.wikipedia.org/wiki/Mediator_pattern)
* [Memento](Behavioral/Memento) [:notebook:](http://en.wikipedia.org/wiki/Memento_pattern)
* [NullObject](Behavioral/NullObject) [:notebook:](http://en.wikipedia.org/wiki/Null_Object_pattern)
* [Observer](Behavioral/Observer) [:notebook:](http://en.wikipedia.org/wiki/Observer_pattern)
* [Specification](Behavioral/Specification) [:notebook:](http://en.wikipedia.org/wiki/Specification_pattern)
* [State](Behavioral/State) [:notebook:](http://en.wikipedia.org/wiki/State_pattern)
* [Strategy](Behavioral/Strategy) [:notebook:](http://en.wikipedia.org/wiki/Strategy_pattern)
* [TemplateMethod](Behavioral/TemplateMethod) [:notebook:](http://en.wikipedia.org/wiki/Template_method_pattern)
* [Visitor](Behavioral/Visitor) [:notebook:](http://en.wikipedia.org/wiki/Visitor_pattern)

### [More](More)

* [EAV](More/EAV) [:notebook:](https://en.wikipedia.org/wiki/Entity%E2%80%93attribute%E2%80%93value_model)
* [Repository](More/Repository)
* [ServiceLocator](More/ServiceLocator) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)
