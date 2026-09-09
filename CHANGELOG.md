# CHANGELOG

Each version heading below is a release tag of the same name, for example
https://github.com/auraphp/Aura.Payload_Interface/releases/tag/3.1.0.

## 3.2.0

Housekeeping release; no changes to the interfaces themselves.

- The package now has continuous integration. The test suite runs on every
  supported PHP version, 5.6 through 8.5, resolving the newest PHPUnit each
  one can take (5.7 on PHP 5.6, up to 12.x on PHP 8.3+).

- The test extends `Yoast\PHPUnitPolyfills\TestCases\TestCase` rather than
  `PHPUnit_Framework_TestCase`. PHPUnit was pinned at `~5.7 || ~4.8`, neither
  of which can run on PHP 8, so the suite had been unrunnable there; the
  release workflow substituted a `php -l` syntax check for it. That
  substitution is gone -- the release now runs the real test suite.

- `composer.json` now requires `^5.6 || ^7.0 || ^8.0`. The lower bound was
  `>=5.5.0`, a version that has been end of life since 2016 and that CI
  cannot install, so nothing was ever verified against it. The constraint
  also has an upper bound now, so a future PHP major cannot silently claim
  support it has not been tested for.

- Dropped the Travis CI configuration, unused since Travis stopped building
  the package. The README now states the PHP versions actually supported, and
  carries the GitHub Actions badge in place of the retired Travis CI one.

## 3.1.0 (2017-07-26)

Extract new `ReadablePayloadInterface` and `WritablePayloadInterface` from
`PayloadInterface`, then compose `PayloadInterface` from them. Existing
implementions of `PayloadInterface` should continue to work, making this a
backwards-compatible change.

## 3.0.0 (2015-12-01)

First stable release.

## 3.0.0-beta1 (2015-11-10)

This release adds a PayloadStatus class of constants that is
implementation-independent.

## 3.0.0-alpha1 (2015-05-13)

First 3.x alpha release.
