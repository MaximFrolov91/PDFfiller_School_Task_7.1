<?php
class Stack
{
    private $top = 0;
    public function in($value)
    {
        $this->hranilishche[$this->top++] = $value;
    }
    public function isEmpty() {
        return $this->top === 0;
    }
    public function last() {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->hranilishche[$this->top-1];
    }
    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->hranilishche[--$this->top];
    }
}
$stackOut = new Stack();
$stackIn = new Stack();
for($i = 0; $i<= 10; $i++) {
    $stackIn->in($i . 'abc');
}
for($i = 0; $i< 10; $i++) {
	$stackOut->in($stackIn->out());
}
print_r($stackOut);
echo $stackOut->out();
echo $stackOut->out();
echo $stackOut->out();