    <footer>
        <!-- Some links etc -->
    </footer>
    <script src="scripts/main.js"></script>
    <?php foreach ($js_files as $js_file): ?>
    <script src="scripts/<?php echo $js_file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
