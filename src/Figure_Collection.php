<?php
namespace TW\oop;
class Figure_Collection implements \Countable, \Serializable
{
    public $figures;

    public function __construct(array $figures)
    {
        $this->figures = $figures;
    }

    public function count()
    {
      return count($this->figures);
    }

    public function __set(string $name, Figure $value): void
    {
        $this->figures[$name] = $value;
    }

    public function __get($name): ?Figure
    {
        return $this->figures[$name] ?? null;
    }

    public function __debugInfo(): array
    {
        return [
            'count' => $this->count(),
            'types' => array_unique(array_map(function ($f){ return get_class($f); }, $this->figures)),
        ];
    }

    public function some(callable $callback): bool
    {
        foreach($this->figures as $figure)
        {
            if($callback($figure) === true)
            {
                return true;
            }
        }

        return false;

    }

    public function every(callable $callback): bool
    {
        foreach ($this->figures as $figure)
        {
            if($callback($figure) !== true)
            {
                return false;
            }
        }

        return true;
    }

    public function __clone()
    {
        foreach($this->figures as &$figure)
        {
            $figure = clone $figure;
        }

        unset($figure);
    }

    public function serialize(): string
    {
         return base64_encode(serialize($this->figures));
    }

    public function unserialize($serialized): void
    {
        $this->figures = unserialize(base64_decode($serialized));
    }

    public function min(): int
    {
        return min(array_map(function (Figure $f){return $f->getVolume();}, $this->figures));
    }

    public function max(): int
    {
        return max(array_map(function (Figure $f){return $f->getVolume();}, $this->figures));
    }

    public function findIndex(callable $callback): ?int
    {
        foreach ($this->figures as $key=>$value)
        {
            if($callback($value) === true)
            {
                return $key;
            }
        }
        return null;
    }

    public function find(callable $callback): ?Figure
    {
        foreach ($this->figures as $item )
        {
            if ($callback($item) === true)
            {
                return $item;
            }
        }
        return null;
    }
}

/*functies doe nog gedaan moeten worden:
zorgen dat alles wat je hebt uiteindelijk in de goede array komt
het gaat niet om de collection en/of surfacearea maar om de Figures

afgerond:
function find callable
minimaal
maximaal
serialize
count
__debuginfo
__get
__set
__clone
types uniek
some bool
every bool
find index
*/
