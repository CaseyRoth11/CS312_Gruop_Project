<body>
    <div>
    <!-- Form Validation -->
    </div>
<main>
<h1>Color Coordinates</h1>
<div id="center">
<table id="desc">
    <thead>
        <tr id="desc">
            <td  colspan="2">With our patent pending Color Coordinate table generator we can create two tables for you.</br>
                The first, a 2x<em>n</em> table with up to <em>n</em> rows based on the number of colors you imput. 
                It will have <em>n</em> colors to choose from that will change the colors of the second table.</br>
                The second is an <em>m</em>x<em>m</em> table where <em>m</em> is the table size specifed.
                This will be lettered from A to <em>m</em>(as a character eg. A=1, B=2, etc) and will react to any color choices made with the first table.<br>
                Our generation is so advanced you will even be able to print the result so give it a try.
            </td>

        </tr>
    </thead>
    <tbody>
    <tr id="desc">
        <th id="desc">Table size</th>
        <th id="desc">Number of colors</th>
    </tr>
    <tr>
        <td id="desc">Enter a number between 1 and 26</td>
        <td id="desc">Enter a number between 1 and 10</td>
    </tr>

    <tr>
    <?php
        echo Form::open(array(
            "action" => "index/m1/colorcoordinate",
            "method" => "post",
            "id" => "fuel_form"
        ));
        echo "<td>";
        echo Form::label('Table Size:&nbsp');
        echo Form::input('tableSize', '', array('type' => 'text'));
        echo "</td>";
        echo "<td>";
        echo Form::label('# of Colors:&nbsp');
        echo Form::input('numberColors', '', array('type' => 'text'));
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo '<td colspan="2">';
        echo Form::input('submit', 'Submit', array('type' => 'submit'));
        echo Form::close();
        echo "</td>"
    ?>
    </tr>
    </tbody>
</table>
    </div>
</main>
</body>
