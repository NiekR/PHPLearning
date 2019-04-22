<?php

class Collection implements Countable, JsonSerializable {

    protected $items = [];

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.

    }

    public function count()
    {
        // TODO: Implement count() method.
        return $this->items;
    }

    public function add($value) {
        $this->items[] = $value;
    }

    public function set($key, $value) {
        $this->items[$key] = $value;
    }

    public function toJson() {
        return json_encode($this->items);
    }
}