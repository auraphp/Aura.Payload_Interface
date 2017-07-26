# CHANGELOG

## 3.1.0

Extract new `ReadablePayloadInterface` and `WritablePayloadInterface` from
`PayloadInterface`, then compose `PayloadInterface` from them. Existing
implementions of `PayloadInterface` should continue to work, making this a
backwards-compatible change.

## 3.0.0

First stable release.

## 3.0.0-beta1

This release adds a PayloadStatus class of constants that is implementation-independent.

## 3.0.0-alpha

First 3.x alpha release.
