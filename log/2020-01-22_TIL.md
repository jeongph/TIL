# 2020-01-22

## vue cli re-install
1. vue cli version check
``` console
$ vue -V # --version
2.9.6
```
2. vue cli update (ERR!)
``` console
$ npm install -g @vue/cli
$ # output
npm ERR! code EEXIST
npm ERR! path C:\Users\ParkJU\AppData\Roaming\npm\node_modules\@vue\cli\bin\vue.js
npm ERR! dest C:\Users\ParkJU\AppData\Roaming\npm\vue
npm ERR! EEXIST: file already exists, cmd shim 'C:\Users\ParkJU\AppData\Roaming\npm\node_modules\@vue\cli\bin\vue.js' -> 'C:\Users\ParkJU\AppData\Roaming\npm\vue'
npm ERR! File exists: C:\Users\ParkJU\AppData\Roaming\npm\vue
npm ERR! Remove the existing file and try again, or run npm
npm ERR! with --force to overwrite files recklessly.

npm ERR! A complete log of this run can be found in:
npm ERR!     C:\Users\ParkJU\AppData\Roaming\npm-cache\_logs\2020-01-22T12_50_12_773Z-debug.log
```
3. npm install path check (for delete)
``` console
$ npm root -g
C:\Users\ParkJU\AppData\Roaming\npm\node_modules
```
- remove vue-cli folder
```
$ rm -rf C:\Users\ParkJU\AppData\Roaming\npm\node_modules\vue-cli
```
- re-install vue-cli (newer version)
``` console
$ npm install -g @vue/cli
$ # added 1115 packages from 635 contributors in 49.869s
$ vue -V
@vue/cli 4.1.2
$ # end(complete)
```