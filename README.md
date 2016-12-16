# Format

`Format` provide the ability to do variable substitutions.
  
## Installation

```
composer require jderusse/format
```

## Usage

```php
format('Hello {who}', ['who' => 'World']);
```

## Usecase

```php
throw new \Exception(format('Fail to load resource "{resource}".', ['resource' => $fileName]);
```

```php
$this->addFlash(format('Project "{name}" succesfully created.', ['name' => $project->getName()]);
```

## Why?

Because I'm not happy with language alternatives.


```diff
- echo 'Should I use "'."'".'" or "'.'"'.'"';
+ echo format('Should I use "{single}" or "{double}"', ['single'=> "'", 'double' => '"']);
```

```diff
- sprintf('%s likes when %s repeat the same things', $user, $user');
+ format('{user} like when {user} repeat the same things', ['user'=> $user]);
```

```diff
- sprintf('%s%s%s', $scheme, $host, $path');
+ format('{scheme}{host}{path}', ['scheme' => $scheme, 'host' => $host, 'path' => $path]);
```

```diff
- echo "Hello {$this->getUser()->getusername()}. Welcome in {$this->getProject()->getName()}":
+ echo format('Hello {user}. Welcome in {project}', ['user' => $this->getUser()->getusername(), 'project' => $this->getProject()->getName()]):
```
