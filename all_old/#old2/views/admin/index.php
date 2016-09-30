<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
    });
</script>
<h2 class="qfont">Summary</h2>
<table class="table table-bordered">
    <tr>
        <th class="span3">System version</th>
        <td>2.1.2</td>
    </tr>
    <tr>
        <th>Total of member(s)</th>
        <td><?php echo $this->db->count_all('members'); ?></td>
    </tr>
    <tr>
        <th>Total of event(s)</th>
        <td><?php echo $this->db->count_all('events'); ?></td>
    </tr>
    <tr>
        <th>Total of message</th>
        <td><?php echo $this->db->count_all('inbox'); ?></td>
    </tr>
    <tr>
        <th>Total of subscribe</th>
        <td><?php
$query = $this->db->query('SELECT DISTINCT(email) FROM ' . $this->db->dbprefix('subscribe') . ';');

echo $query->num_rows();
?></td>
    </tr>
    <tr>
        <th>Total of current session</th>
        <td><?php echo $this->db->count_all('sessions'); ?></td>
    </tr>
</table>