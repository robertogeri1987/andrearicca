#!/bin/bash -e
echo "Install tailwind? (y/n)"
read -e confirm

if [ "$confirm" == y ] ; then
cd wp-content/themes/main-theme
npm install -D tailwindcss
npx tailwindcss init
fi