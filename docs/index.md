# Aura.Payload_Interface

## Overview

A *Domain Payload* transports domain objects across layers. For example, an
HTTP-specific user interface layer calls an Application Service to retrieve one
or more domain objects for presentation. The Application Service performs all
the necessary work, then wraps the domain results into a Domain Payload, and
passes the Domain Payload back to the user interface layer.

The pattern originates with [Vaughn Vernon](https://vaughnvernon.co/?page_id=40):

> By any name the Domain Payload Object is a specialized Data Transfer
> Object. The motivation for both patterns is the same. However, I have
> codified this as a separate pattern to emphasize the differences. A
> Data Transfer Object is a fine-grained object, providing properties
> that mirror or at least shadow properties found on the domain objects
> that they replicate. A Domain Payload Object is a coarse-grained
> object that transfers whole domain object instances to the client.

One major benefit of a Domain Payload is that the calling layer does not need to
examine the results in fine detail to figure out what the domain layer "means"
when it returns its results. A _NotAuthorized_ payload object explicitly
indicates failure (the user was not authorized to perform the requested domain
activity), whereas a _Found_ payload object explicitly indicates success and a
result set of domain objects. This makes building presentation logic much more
straightforward.

## Implementation

This is an interface-only package and does not contain an implementation.

Your domain layer should create a domain payload instance, call one or more of
the following methods, and return the payload object to the calling code. (Each
of these methods is optional.)

- `setStatus()`: Sets the payload status in terms of the domain layer; e.g.,
`success`, `failure`, and so on.

- `setInput()`: Sets the input as received by the domain layer.

- `setOutput()`: Sets the output produced by the domain layer.

- `setMessages()`: Sets the messages reported by the domain layer.

- `setExtras()`: Sets arbitrary "extra" values produced by the domain layer.

You calling code can then examine the payload object using the `get*()` complements
to the the `set*()` methods.

- `getStatus()`: Gets the payload status in terms of the domain layer.

- `getInput()`: Gets the input as received by the domain layer.

- `getOutput()`: Gets the output produced by the domain layer.

- `getMessages()`: Gets the messages reported by the domain layer.

- `getExtras()`: Gets arbitrary "extra" values produced by the domain layer.
