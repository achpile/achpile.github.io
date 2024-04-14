#!/bin/bash

for file in src/*; do
	php $file > `basename $file | sed "s/php/html/"`
done

for file in *.html; do
	sed -i "s/\.php\"/\.html\"/" $file
done
