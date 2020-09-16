<?php
require_once dirname(__FILE__) . '/../observer/observer.class.php';
require_once dirname(__FILE__) . '/../observer/newsObserver.class.php';
require_once dirname(__FILE__) . '/../observer/bookObserver.class.php';
require_once dirname(__FILE__) . '/../observer/subject.class.php';
require_once dirname(__FILE__) . '/../observer/noticeSubject.class.php';

use \observer\{
    observer,
    newsObserver,
    bookObserver,
    subject,
    noticeSubject
};

$subject = new noticeSubject();

$newsOberver =new newsObserver($subject);
$bookOberver = new bookObserver($subject);

$subject->modify(['time' => time()]);
sleep(1);

$subject->remove($bookOberver);

$subject->modify(['time' => time()]);
sleep(rand(0, 2));
$subject->modify(['time' => time()]);

