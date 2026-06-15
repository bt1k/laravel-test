#!/bin/bash

# This script checks the codebase for vulnerabilities. You must install Composer
# and NPM for this script to work.

echo "=== CHECKING COMPOSER VULNERABILITIES... ==="
composer audit

echo "=== CHECKING COMPOSER OUTDATED PACKAGES... ==="
composer outdated

echo "=== CHECKING NPM VULNERABILITIES... ==="
npm audit

echo "=== CHECKING NPM OUTDATED PACKAGES... ==="
npm outdated

echo "=== SCRIPT FINISHED ==="
