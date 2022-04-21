echo "$(tput setaf 6)" &&

echo 'Cleanup and bundling Process started...      (10%)\r' &&
# npm run prod

echo -ne 'Removing existing "master-addons" built Folder......              (20%)\r'

rm -rf readme.md

echo "$(tput setaf 2)" &&
echo "Clean process completed!"
echo "$(tput sgr0)"
