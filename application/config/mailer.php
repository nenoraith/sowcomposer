<?php

return array(
  'transport' => Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                                    ->setUsername('sowcomposer')
                                    ->setPassword('')
);