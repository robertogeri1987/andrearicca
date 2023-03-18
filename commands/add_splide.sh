#!/bin/bash -e
echo "Install splide? (y/n)"
read -e confirm

if [ "$confirm" == y ] ; then
cd wp-content/themes/main-theme
npm install @splidejs/splide
npm i @splidejs/splide-extension-auto-scroll
fi