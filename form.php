<?php
/**
 * Nama Class : Form
 * Deskrripsi : Class untuk membuat form inputan text sedrhana
 **/

 class Form
 {
    private $fields = array();
    private $action;
    private $submit ="Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action."' method='post'>";
        echo '<table width="30%" border="20">';
        for ($j=0; $j<count($this->fields); $j++) {
            echo "<tr><td align='left'>".$this->fields[$j]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$j]['name']."'></td></tr>";
        }
        echo "<tr><td  colspan='2'>";
        echo "<input type='submit' value='".$this->submit."' /></td></tr>";
        echo "</table>"; 
    }

    public function addField($name, $label)
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField ++;
    }
 }
 ?>