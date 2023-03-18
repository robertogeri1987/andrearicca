#!/usr/bin/env bash
read -p "Si desidera eseguire il commit e push su github? (y/n)" -n 1 -r
echo    # (optional) move to a new line
if [[ $REPLY =~ ^[Yy]$ ]]
then
echo "Inserire un commento per il commit"
read COMMENTO
npm run prod
git add --all
git commit -am "$COMMENTO"
git push
fi
