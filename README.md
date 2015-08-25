### Requirements

virtualbox / vagrant / bundler

```bash
  $brew cask install virtualbox
  $brew cask install vagrant
  $gem install bundler
```

### Usage

after download this repository ...

```bash
  $vagrant up
  $bundle install --path vendor/bundle
  $bundle exec itamae ssh -h 192.168.33.10 -u vagrant itamae/recipe.rb
```

open browser and access http://192.168.33.10/  
you will see the wordpress setting page.