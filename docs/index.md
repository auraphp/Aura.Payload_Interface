# Aura.Payload_Interface

## Overview

A *Domain Payload* transports domain objects across program layers. For example,
an HTTP-specific user interface layer calls an Application Service to retrieve
one or more domain objects for presentation. The Application Service performs
all the necessary work, then wraps the domain results into a Domain Payload, and
passes the Domain Payload back to the user interface layer.

The pattern originates with [Vaughn Vernon](https://vaughnvernon.co/?page_id=40):

> By any name the Domain Payload Object is a specialized Data Transfer
> Object. The motivation for both patterns is the same. However, I have
> codified this as a separate pattern to emphasize the differences. A
> Data Transfer Object is a fine-grained object, providing properties
> that mirror or at least shadow properties found on the domain objects
> that they replicate. A Domain Payload Object is a coarse-grained
> object that transfers whole domain object instances to the client.

One benefit of using a Domain Payload is that the calling layer does not need to
examine the domain objects in fine detail to figure out what the domain layer
"means" when it returns its results. A Domain Payload with a `NOT_AUTHORIZED`
status explicitly indicates failure (the user was not authorized to perform the
requested domain activity), whereas a Domain Payload with a `FOUND` status
explicitly indicates success and a result set of domain objects. This makes
building presentation logic much more straightforward.

## Implementation

This is an interface-only package and does not contain an implementation. For
one possible implementation, please see
[Aura.Payload](https://github.com/auraphp/Aura.Payload).

In your domain layer, create a payload class that implements the interface.
Then call one or more of the following methods, and return the payload
object to the calling code. (Each of these methods is optional.)

- `setStatus()`: Sets the payload status in terms of the domain layer; e.g.,
`success`, `failure`, and so on. These statuses are specifuc to your domain;
some general-purpose status values are presented below.

- `setInput()`: Sets the input as received by the domain layer.

- `setOutput()`: Sets the output produced by the domain layer.

- `setMessages()`: Sets the messages reported by the domain layer.

- `setExtras()`: Sets arbitrary "extra" values produced by the domain layer.

The calling code can then examine the payload object using the `get*()`
complements to the the `set*()` methods.

- `getStatus()`: Gets the payload status in terms of the domain layer.

- `getInput()`: Gets the input as received by the domain layer.

- `getOutput()`: Gets the output produced by the domain layer.

- `getMessages()`: Gets the messages reported by the domain layer.

- `getExtras()`: Gets arbitrary "extra" values produced by the domain layer.

## Status Values

Several generic status values are available as constants in the _PayloadStatus_
class:

- `PayloadStatus::ACCEPTED`: A command has been accepted for later processing.
- `PayloadStatus::AUTHENTICATED`: An authentication attempt succeeded.
- `PayloadStatus::AUTHORIZED`: An authorization request succeeded.
- `PayloadStatus::CREATED`: A creation attempt succeeded.
- `PayloadStatus::DELETED`: A deletion attempt succeeded.
- `PayloadStatus::ERROR`: There was a major error of some sort.
- `PayloadStatus::FAILURE`: There was a generic failure of some sort.
- `PayloadStatus::FOUND`: A query successfullly returned results.
- `PayloadStatus::NOT_ACCEPTED`: A command failed to be accepted.
- `PayloadStatus::NOT_AUTHENTICATED`: The user is not authenticated.
- `PayloadStatus::NOT_AUTHORIZED`: The user is not authorized for the action.
- `PayloadStatus::NOT_CREATED`: A creation attempt failed.
- `PayloadStatus::NOT_DELETED`: A deletion attempt failed.
- `PayloadStatus::NOT_FOUND`: A query failed to return results.
- `PayloadStatus::NOT_UPDATED`: An update attempt failed.
- `PayloadStatus::NOT_VALID`: User input was invalid.
- `PayloadStatus::PROCESSING`: A command is in-process but not finished.
- `PayloadStatus::SUCCESS`: There was a generic success of some sort.
- `PayloadStatus::UPDATED`: An update attempt succeeded.
- `PayloadStatus::VALID`: User input was valid.

Your user-interface layer can use these to determine how to process and present
the domain objects retrieved via the `getOutput()` method. You may wish to map
these to HTTP status codes or CLI exit codes in your presentation layer.
