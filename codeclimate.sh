#!/usr/bin/env sh

php vendor/bin/test-reporter --stdout > codeclimate.json
curl -X POST -d @codeclimate.json -H 'Content-Type: application/json' -H 'User-Agent: Code Climate (PHP Test Reporter v0.1.1)' https://api.codeclimate.com/v1/test_reports