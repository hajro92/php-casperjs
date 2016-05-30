/**
     *
     * @param unknown $selector
     *
     * @return \Browser\Casper
     */
    public function clickLabel($selector)
    {
        $fragment = <<<FRAGMENT
casper.then(function() {
    this.clickLabel('$selector');
});

FRAGMENT;

        $this->_script .= $fragment;

        return $this;
    }
