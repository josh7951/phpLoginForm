<strong>PURPOSE</strong><br>
<p>You  are  going  to  learn  how  to  create  a  basic  full-­stack  website  using  PHP  and  MySQL,  as  wellas  learn  to  use  AJAX  with  JSON  (extracredit).</p>
<strong>Basic Site Functionality</strong><br>
<p>In  this  lab,  you  will  implement  a  web  page  that  allows  a  user  to  register  or  log  in  to  a  site.  This  web  page  is  created  using  a  file  called  lab2.phpand  others  if  needed.The  page  must  have  a  sectionwhere  a  new  user  can  register  with  a  username  and  password.  There  should  also  be  another  section  where  returning  users  canlog  in.Once  a  user  logs  in,  the  server  will  return  a  page  with  the  following:
    <ul>
        <li>Welcome  message  to  the  user</li>
        <li>A  button  that  changes  the  background  color  of  the  current  pageo(This  functionality  is  largely  up  to  you.  You  can  toggle  between  multiple  different  colors  with  each  button  click  if  you  like.)</li>
        <li>A  logout  buttonor  linkthat  takes  them  back  to  the  login/registration/start  page</li>
    </ul>
The  look  and  feel  and  navigation  of  the  siteis  up  to  you,  and  can  be  kept  very  basic  for  the  purpose   of   this   assignment.  You   may   use   the   PHP   session   object   (session_start()   and   the  $_SESSION  superglobal,  etc)  if  desired,  but  this  is  not  required.(In   general,   you   may   wish   to   brush   up   on   the   best   practices   of   secure   PHP   code:  https://www.owasp.org/index.php/PHP_Security_Cheat_Sheet)The  registration  page  may  be  the  one  you  used  in  Lab  1.  If  so,  you  may  wish  to  disable/remove  the  inputs  that  are  not  needed  on  this  lab.  In  this  lab,  all  that  is  needed  for  user  registration  is  a  username  and  password.</p>
<br>
<br>
<strong>The Administrator User</strong>
<p>Finally,   there   should   be   a   special   user   in   the   database   named   Administrator.   No   user  may  register   with   this  username.   You   can   add   Administrator   to   the   database   manually,   with   a  password  of  your  choice.</p>
<br>
<br>
<p>When  a  user  logs  in  successfully  as  Administrator,  the  page  they  see  contains  a  table  listing  all  the  users  of  the  site  by  usernameand  password,  in  sorted  order  by  username(alphanumeric  ascending  sorted  order).  (Obviously  this  is  insecure,  and  for  the  extracredit,  you  would  display  the  “hashed  password”on  this  page  instead  of  a  plaintext  password.Also,  you  should  be  using  MySQLquery  with  ORDER  BY  clauseto  sort  the  usernames,  rather  than  sorting  them  in  your  code.)</p>