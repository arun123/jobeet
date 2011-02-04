// config/error/exception.yaml.php
<?php echo sfYaml::dump(array(
  'error'       => array(
    'code'      => $code,
    'message'   => $message,
    'debug'     => array(
      'name'    => $name,
      'message' => $message,
      'traces'  => $traces,
    ),
)), 4) ?>
