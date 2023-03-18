#!/bin/bash -e
echo "Install gsap? (y/n)"
read -e confirm

if [ "$confirm" == y ] ; then
cd wp-content/themes/main-theme
npm i gsap
echo "import { gsap } from \"gsap\";
$(cat ts/main.ts)" > ts/main.ts
fi