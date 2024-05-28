<?php



class TextFilter
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function toLowerCase()
    {
        $this->text = strtolower($this->text);
        return $this;
    }

    public function toUpperCase()
    {
        $this->text = strtoupper($this->text);
        return $this;
    }

    public function capitalizeWords()
    {
        $this->text = ucwords($this->text);
        return $this;
    }

    public function removePunctuation()
    {
        $this->text = preg_replace("/[^\w\s]/", "", $this->text);
        return $this;
    }

    public function trimWhitespace()
    {
        $this->text = trim($this->text);
        return $this;
    }

    public function replace($search, $replace)
    {
        $this->text = str_replace($search, $replace, $this->text);
        return $this;
    }

    public function stripTags()
    {
        $this->text = strip_tags($this->text);
        return $this;
    }

    public function addPrefix($prefix)
    {
        $this->text = $prefix . $this->text;
        return $this;
    }

    public function addSuffix($suffix)
    {
        $this->text = $this->text . $suffix;
        return $this;
    }

    public function limitLength($length)
    {
        if (strlen($this->text) > $length) {
            $this->text = substr($this->text, 0, $length);
        }
        return $this;
    }
}

