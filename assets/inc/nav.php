<nav class="subnav">
    <ol class="nav nav-list container-fluid nav-collapse collapse in">
        <li<?php echo (isset($page) && $page=='home') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>index.php">Home</a>
        </li>
        
        <li<?php echo (isset($page) && $page=='introduction') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>introduction/index.php">Introduction</a>
        </li>
        
        <li<?php echo (isset($page) && $page=='usercommands') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>usercommands/index.php">User Commands</a>
        </li>
        
        <li<?php echo (isset($page) && $page=='tutorials') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>tutorials/index.php">Tutorials</a>
        </li>
        
        <li<?php echo (isset($page) && $page=='support') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>support/index.php">Support</a>
        </li>
        
        <li<?php echo (isset($page) && $page=='survey') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>survey/index.php">Survey</a>
        </li>

        <li<?php echo (isset($page) && $page=='quiz') ? ' class="active" ' :'' ?>>
            <a href="<?php echo $path; ?>quiz/index.php">Quiz</a>
        </li>
        
    </ol>
</nav><!-- end subnav -->