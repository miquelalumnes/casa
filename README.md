A web-based toolset for music teachers and students. Please note that this requires bootstrap.min.css and jquery 3.5 in their respective directories. These can be found [here](https://getbootstrap.com/docs/4.4/getting-started/download/) and [here](https://jquery.com/download/)

Students can sign up at the <code>registration.php</code> page, and log in at the <code>login.php</code> page.

<code>repcounter.html</code> is a simple tally counter. It can help a student with exercises where the student needs to play an excerpt correctly a set number of times.

<code>loop_practice.php</code> shows up to three videos that loop without end. This encourages the student to either watch the videos or play with the videos repeatedly without the effort of pressing a button at each repetition. Please note that the video filenames need to be lowercase, in the format <code>username-loop.mp4</code>, and stored in the directory named <code>/lrc</code>.

<code>process2.php</code> allows a student to check their practice log and leave a comment for the teacher at the end of each practice session.

<code>logout.php</code> desroys all session data and returns to <code>login.php</code>. This is also called when the <code>loop_practice.php</code> loses focus, as many students are not used to logging out with a button.

The <code>scarps</code> folder contains the necessary files to practice scales and arpeggios. When a student selects a level, a randomly chosen video will play. Once that's done, another randomly chosen video will play. The buttons below the video allow the student to choose two differet speeds.

The "Jocs" (games) page leads to a note-naming game. You'll need to add the <code>w3.css</code> file to the css directory from [here](https://www.w3schools.com/w3css/) or other CSS framework of your choice. You may also wish to add <code>.ttf</code> font files to the fonts directory.

Admin tools
-----------

<code>Check_prclog.php</code> shows all students's practice logs.
<code>Check_userlog.php</code> shows all students that have signed up.
<code>Check_videoSeen.php</code> shows all students who have watched to the end of the teacher's video performance.
<code>delete_prclogid.php</code> allows admin to delete student log entries by ID. Useful when test entries clog up the log.
<code>loopvidcheck.php</code> shows <code>loop_practice.php</code> videos for a selected student without logging in.
<code>lrc_upload.html</code> allows a teacher to quickly upload a video file for display at <code>loop_practice.php</code>
<code>weekly-video-upload.html</code> also lets a teacher quickly upload a video file of a teacher's performance.