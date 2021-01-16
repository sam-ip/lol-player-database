

<html>
    <head>
        <title>CPSC 304 League of Legends Database Proof of Concept</title>
    </head>

    <body>
        <h2>
        CPSC 304 League of Legends Database Proof of Concept
        </h2>
        <hr />
        <h2>Insert LoL Match</h2>
        <form method="POST" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertMatchRequest" name="insertMatchRequest">
            Team 1: <br/><br/> 
            Summoner Name: <input type="text" name="insName1"> 
            Champion: <input type="text" name="insChamp1"> 
            Kills: <input type="text" name="insKills1"> 
            Deaths: <input type="text" name="insDeaths1"> 
            Assists: <input type="text" name="insAssists1"> 
            Resource Earned: <input type="text" name="insResourceEarned1"> 
            Role: <input type="text" name="insRole1"> 
            Vision Score: <input type="text" name="insVisionScore1"> 
            Final Level: <input type="text" name="insFinalLevel1"> <br /><br />

            Summoner Name: <input type="text" name="insName2"> 
            Champion: <input type="text" name="insChamp2"> 
            Kills: <input type="text" name="insKills2"> 
            Deaths: <input type="text" name="insDeaths2"> 
            Assists: <input type="text" name="insAssists2"> 
            Resource Earned: <input type="text" name="insResourceEarned2"> 
            Role: <input type="text" name="insRole2"> 
            Vision Score: <input type="text" name="insVisionScore2"> 
            Final Level: <input type="text" name="insFinalLevel2"> <br /><br />

            Summoner Name: <input type="text" name="insName3"> 
            Champion: <input type="text" name="insChamp3">
            Kills: <input type="text" name="insKills3"> 
            Deaths: <input type="text" name="insDeaths3"> 
            Assists: <input type="text" name="insAssists3"> 
            Resource Earned: <input type="text" name="insResourceEarned3">
            Role: <input type="text" name="insRole3"> 
            Vision Score: <input type="text" name="insVisionScore3"> 
            Final Level: <input type="text" name="insFinalLevel3"> <br /><br />

            Summoner Name: <input type="text" name="insName4"> 
            Champion: <input type="text" name="insChamp4"> 
            Kills: <input type="text" name="insKills4"> 
            Deaths: <input type="text" name="insDeaths4"> 
            Assists: <input type="text" name="insAssists4"> 
            Resource Earned: <input type="text" name="insResourceEarned4"> 
            Role: <input type="text" name="insRole4"> 
            Vision Score: <input type="text" name="insVisionScore4"> 
            Final Level: <input type="text" name="insFinalLevel4"> <br /><br />

            Summoner Name: <input type="text" name="insName5"> 
            Champion: <input type="text" name="insChamp5"> 
            Kills: <input type="text" name="insKills5"> 
            Deaths: <input type="text" name="insDeaths5"> 
            Assists: <input type="text" name="insAssists5"> 
            Resource Earned: <input type="text" name="insResourceEarned5"> 
            Role: <input type="text" name="insRole5"> 
            Vision Score: <input type="text" name="insVisionScore5"> 
            Final Level: <input type="text" name="insFinalLevel5"> <br /><br />

            Team 2: <br/><br/> 
            Summoner Name: <input type="text" name="insName6"> 
            Champion: <input type="text" name="insChamp6"> 
            Kills: <input type="text" name="insKills6"> 
            Deaths: <input type="text" name="insDeaths6"> 
            Assists: <input type="text" name="insAssists6"> 
            Resource Earned: <input type="text" name="insResourceEarned6"> 
            Role: <input type="text" name="insRole6"> 
            Vision Score: <input type="text" name="insVisionScore6"> 
            Final Level: <input type="text" name="insFinalLevel6"> <br /><br />

            Summoner Name: <input type="text" name="insName7"> 
            Champion: <input type="text" name="insChamp7"> 
            Kills: <input type="text" name="insKills7"> 
            Deaths: <input type="text" name="insDeaths7"> 
            Assists: <input type="text" name="insAssists7"> 
            Resource Earned: <input type="text" name="insResourceEarned7"> 
            Role: <input type="text" name="insRole7"> 
            Vision Score: <input type="text" name="insVisionScore7"> 
            Final Level: <input type="text" name="insFinalLevel7"> <br /><br />

            Summoner Name: <input type="text" name="insName8"> 
            Champion: <input type="text" name="insChamp8"> 
            Kills: <input type="text" name="insKills8"> 
            Deaths: <input type="text" name="insDeaths8"> 
            Assists: <input type="text" name="insAssists8"> 
            Resource Earned: <input type="text" name="insResourceEarned8"> 
            Role: <input type="text" name="insRole8"> 
            Vision Score: <input type="text" name="insVisionScore8"> 
            Final Level: <input type="text" name="insFinalLevel8"> <br /><br />

            Summoner Name: <input type="text" name="insName9"> 
            Champion: <input type="text" name="insChamp9"> 
            Kills: <input type="text" name="insKills9"> 
            Deaths: <input type="text" name="insDeaths9"> 
            Assists: <input type="text" name="insAssists9"> 
            Resource Earned: <input type="text" name="insResourceEarned9"> 
            Role: <input type="text" name="insRole9"> 
            Vision Score: <input type="text" name="insVisionScore9"> 
            Final Level: <input type="text" name="insFinalLevel9"> <br /><br />

            Summoner Name: <input type="text" name="insName10"> 
            Champion: <input type="text" name="insChamp10"> 
            Kills: <input type="text" name="insKills10"> 
            Deaths: <input type="text" name="insDeaths10"> 
            Assists: <input type="text" name="insAssists10"> 
            Resource Earned: <input type="text" name="insResourceEarned10"> 
            Role: <input type="text" name="insRole10"> 
            Vision Score: <input type="text" name="insVisionScore10"> 
            Final Level: <input type="text" name="insFinalLevel10"> <br /><br />

            Team with First Blood: <select name="firstBlood">
            <option>1</option>
            <option>2</option>
            </select>
            <br/><br/> 
            Team that won:
            <select name="matchWinner">
            <option>1</option>
            <option>2</option>
            </select>
            <br/><br/> 
            Duration: <input type="text" name="insDuration"> <br /><br />
            Game Mode: <input type="text" name="insGamemode"> <br /><br />
            Region Code: <input type="text" name="insRegionCode"> <br /><br />
            <input type="submit" value="Submit" name="insertMatch"></p>
        </form>    

        <hr />
        <h2>Insert Item into Items</h2>
        <form method="POST" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Name: <input type="text" name="insName"> <br /><br />
            Attack Damage: <input type="text" name="insAD"> <br /><br />
            Ability Power: <input type="text" name="insAP"> <br /><br />
            Attack Speed: <input type="text" name="insAS"> <br /><br />
            Health: <input type="text" name="insHealth"> <br /><br />
            Mana: <input type="text" name="insMana"> <br /><br />
            Armour: <input type="text" name="insArmour"> <br /><br />
            Magic Resist: <input type="text" name="insMR"> <br /><br />
            Crit Chance: <input type="text" name="insCritChance"> <br /><br />
            Ability Haste: <input type="text" name="insAH"> <br /><br />
            Lifesteal: <input type="text" name="insLifesteal"> <br /><br />
            Omnivamp: <input type="text" name="insOmnivamp"> <br /><br />
            Health Regen: <input type="text" name="insHR"> <br /><br />
            Mana Regen: <input type="text" name="insManaR"> <br /><br />
            Movement Speed: <input type="text" name="invsMovespeed"> <br /><br />
            Cost: <input type="text" name="insCost"> <br /><br />
            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form>

        <hr />
        <h2>Delete Match from Matches</h2>
        <form method="POST" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
            Game ID: <input type="text" name="delChamp"> <br /><br />
            <input type="submit" value="Delete" name="deleteSubmit"></p>
        </form>

        <hr />
        <h2>Update Value in Table</h2>
        <p>Update one of the tables.</p>
        <form method="POST" action="Test.php"> <!--refresh page when submitted-->
            <?php
            include 'connect.php';
            $conn = OpenCon();
            $result = $conn->query("SHOW TABLES");
            $tables = $result->fetch_all();
            echo "<select name='updateTableName'>";
            foreach($tables as $table){
                $name = $table[0];
                echo '<option value= '.$name.'>'.$name.'</option>';
            }
            echo "</select>";
            ?>
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest"><br /><br />
            Attribute: <input type="text" name="updateSet"> <br /><br />
            New Value: <input type="text" name="updateInput1"> <br /><br />
            Where: <input type="text" name="updateWhere"> <br /><br />
            Is Equal To: <input type="text" name="updateInput2"> <br /><br />
            <input type="submit" value="Update" name="updateSubmit"></p>
        </form>

        <hr />
        <h2>Select Kills and Resources from LeaguePlayer</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="selectTuples" name="selectTuples">
            Where Deaths < <input type="text" name="deaths"> <br /><br />
            And Assists > <input type="text" name="assists"> <br /><br />
            <input type="submit" value="Select" name="selectTupleRequest"></p>
        
        </form>

        <hr />
        <h2>Project from Item / LeaguePlayer / Champion</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <select name="projectTable">
            <option>Item</option>
            <option>League Player</option>
            <option>Champion</option>
            </select>
            <input type="hidden" id="projectTuples" name="projectTuples">
            <input type="submit" value="Select" name="projectTupleRequest"></p>
        </form>

        <hr />
        <h2>Get Match Stats of Champion</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="joinTuples" name="joinTuples">
            Champion <input type="text" name="joinChamp"> <br /><br />
            <input type="submit" value="Get" name="joinTupleRequest"></p>
        </form> 

        <hr />
        <h2>Get Max Kills of each Role</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="aggregationGroupByTuples" name="aggregationGroupByTuples">
            <input type="submit" value="Get" name="aggregationGroupByRequest"></p>
        </form>   

        <hr />
        <h2>Get Avg Deaths of Players with Over 5 Kills</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="aggregationHavingTuples" name="aggregationHavingTuples">
            <input type="submit" value="Get" name="aggregationHavingRequest"></p>
        </form>   

        <hr />
        <h2>Get Info on Player with the Minimum Deaths in that Role that is less than 5</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="nestedAggregationTuples" name="nestedAggregationTuples">
            <input type="submit" value="Get" name="nestedAggregationRequest"></p>
        </form>   
        
        <hr />
        <h2>Get Name of Players who have bought every item in the game with Omnivamp</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="divisionTuples" name="divisionTuples">
            <input type="submit" value="Get" name="divisionTupleRequest"></p>
        </form>   

	    <hr />
        <h2>Display the Tuples in DemoTable</h2>
        <form method="GET" action="Test.php"> <!--refresh page when submitted-->
            <?php
            $conn = OpenCon();
            $result = $conn->query("SHOW TABLES");
            $tables = $result->fetch_all();
            echo "<select name='tableName'>";
            foreach($tables as $table){
                $name = $table[0];
                echo '<option value= '.$name.'>'.$name.'</option>';
            }
            echo "</select>";
            ?>
            <input type="hidden" id="displayTupleRequest" name="displayTupleRequest">
            <input type="submit" name="displayTuples"></p>
        </form>

        <?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())
        
        if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || 
            isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit']) || isset($_POST['insertMatch'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest']) || isset($_GET['displayTupleRequest']) || 
                    isset($_GET['selectTupleRequest']) || isset($_GET['projectTupleRequest']) || 
                    isset($_GET['joinTupleRequest']) || isset($_GET['aggregationGroupByRequest']) ||
                    isset($_GET['aggregationHavingRequest']) || isset($_GET['nestedAggregationRequest']) ||
                    isset($_GET['divisionTupleRequest'])) {
            handleGETRequest();
        }

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                } else if (array_key_exists('deleteQueryRequest', $_POST)) {
                    handleDeleteRequest();
                } else if (array_key_exists('insertMatchRequest', $_POST)) {
                    handleInsertMatchRequest();
                }
        }

        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (array_key_exists('countTuples', $_GET)) {
                handleCountRequest();
            } else if (array_key_exists('displayTuples', $_GET)) {
		        handleDisplayRequest();
		    } else if (array_key_exists('selectTuples', $_GET)) {
                handleSelectRequest();
            } else if (array_key_exists('projectTuples', $_GET)) {
                handleProjectRequest();
            } else if (array_key_exists('joinTuples', $_GET)) {
                handleJoinRequest();
            } else if (array_key_exists('aggregationGroupByTuples', $_GET)) {
                handleAggregationWithGroupBy();
            } else if (array_key_exists('aggregationHavingTuples', $_GET)) {
                handleAggregationWithHaving();
            } else if (array_key_exists('nestedAggregationTuples', $_GET)) {
                handleNestedAggregation();
            } else if (array_key_exists('divisionTuples', $_GET)) {
                handleDivision();
            }
        }

        function handleInsertMatchRequest() {
            $conn = OpenCon();
            $name1 = $_POST['insName1'];
            $champ1 = $_POST['insChamp1'];
            $kills1 = $_POST['insKills1'];
            $deaths1 = $_POST['insDeaths1'];
            $assists1 = $_POST['insAssists1'];
            $resource1 = $_POST['insResourceEarned1'];
            $role1 = $_POST['insRole1'];
            $vision1 = $_POST['insVisionScore1'];
            $level1 = $_POST['insFinalLevel1'];

            $name2 = $_POST['insName2'];
            $champ2 = $_POST['insChamp2'];
            $kills2 = $_POST['insKills2'];
            $deaths2 = $_POST['insDeaths2'];
            $assists2 = $_POST['insAssists2'];
            $resource2 = $_POST['insResourceEarned2'];
            $role2 = $_POST['insRole2'];
            $vision2 = $_POST['insVisionScore2'];
            $level2 = $_POST['insFinalLevel2'];

            $name3 = $_POST['insName3'];
            $champ3 = $_POST['insChamp3'];
            $kills3 = $_POST['insKills3'];
            $deaths3 = $_POST['insDeaths3'];
            $assists3 = $_POST['insAssists3'];
            $resource3 = $_POST['insResourceEarned3'];
            $role3 = $_POST['insRole3'];
            $vision3 = $_POST['insVisionScore3'];
            $level3 = $_POST['insFinalLevel3'];

            $name4 = $_POST['insName4'];
            $champ4 = $_POST['insChamp4'];
            $kills4 = $_POST['insKills4'];
            $deaths4 = $_POST['insDeaths4'];
            $assists4 = $_POST['insAssists4'];
            $resource4 = $_POST['insResourceEarned4'];
            $role4 = $_POST['insRole4'];
            $vision4 = $_POST['insVisionScore4'];
            $level4 = $_POST['insFinalLevel4'];

            $name5 = $_POST['insName5'];
            $champ5 = $_POST['insChamp5'];
            $kills5 = $_POST['insKills5'];
            $deaths5 = $_POST['insDeaths5'];
            $assists5 = $_POST['insAssists5'];
            $resource5 = $_POST['insResourceEarned5'];
            $role5 = $_POST['insRole5'];
            $vision5 = $_POST['insVisionScore5'];
            $level5 = $_POST['insFinalLevel5'];

            $name6 = $_POST['insName6'];
            $champ6 = $_POST['insChamp6'];
            $kills6 = $_POST['insKills6'];
            $deaths6 = $_POST['insDeaths6'];
            $assists6 = $_POST['insAssists6'];
            $resource6 = $_POST['insResourceEarned6'];
            $role6 = $_POST['insRole6'];
            $vision6 = $_POST['insVisionScore6'];
            $level6 = $_POST['insFinalLevel6'];

            $name7 = $_POST['insName7'];
            $champ7 = $_POST['insChamp7'];
            $kills7 = $_POST['insKills7'];
            $deaths7 = $_POST['insDeaths7'];
            $assists7 = $_POST['insAssists7'];
            $resource7 = $_POST['insResourceEarned7'];
            $role7 = $_POST['insRole7'];
            $vision7 = $_POST['insVisionScore7'];
            $level7 = $_POST['insFinalLevel7'];

            $name8 = $_POST['insName8'];
            $champ8 = $_POST['insChamp8'];
            $kills8 = $_POST['insKills8'];
            $deaths8 = $_POST['insDeaths8'];
            $assists8 = $_POST['insAssists8'];
            $resource8 = $_POST['insResourceEarned8'];
            $role8 = $_POST['insRole8'];
            $vision8 = $_POST['insVisionScore8'];
            $level8 = $_POST['insFinalLevel8'];

            $name9 = $_POST['insName9'];
            $champ9 = $_POST['insChamp9'];
            $kills9 = $_POST['insKills9'];
            $deaths9 = $_POST['insDeaths9'];
            $assists9 = $_POST['insAssists9'];
            $resource9 = $_POST['insResourceEarned9'];
            $role9 = $_POST['insRole9'];
            $vision9 = $_POST['insVisionScore9'];
            $level9 = $_POST['insFinalLevel9'];

            $name10 = $_POST['insName10'];
            $champ10 = $_POST['insChamp10'];
            $kills10 = $_POST['insKills10'];
            $deaths10 = $_POST['insDeaths10'];
            $assists10 = $_POST['insAssists10'];
            $resource10 = $_POST['insResourceEarned10'];
            $role10 = $_POST['insRole10'];
            $vision10 = $_POST['insVisionScore10'];
            $level10 = $_POST['insFinalLevel10'];

            $firstBlood = $_POST['firstBlood'];
            $matchWinner = $_POST['matchWinner'];
            $regionCode = $_POST['insRegionCode'];
            $duration = $_POST['insDuration'];
            $gameMode = $_POST['insGamemode'];

            $sqlGameID = "SELECT MAX(gameID) 
                          FROM riot_match";
            $gameID = $conn->query($sqlGameID);
            $gameIDRow = $gameID->fetch_row();
            $newGameID = $gameIDRow[0] + 1;
            

            $sqlParticipantIDlol = "SELECT MAX(ParticipantID)
                                    FROM LeaguePlayer";
            $sqlParticipantIDval = "SELECT MAX(ParticipantID)
                                    FROM ValorantPlayer";   
            $pID1 = $conn->query($sqlParticipantIDlol);
            $pID2 = $pID1->fetch_row();
            $pIDLOL = $pID2[0];        
            $pID3 = $conn->query($sqlParticipantIDval);
            $pID4 = $pID3->fetch_row();
            $pIDVAL = $pID4[0];   

            $pIDMax;
            if ($pIDLOL < $pIDVAL) {
                $pIDMax = $pIDVAL;
            } else {
                $pIDMax = $pIDLOL;
            }

            $sqlTeamID = "SELECT MAX(TeamID)
                           FROM team";
            $teamID = $conn->query($sqlTeamID);
            $teamIDRow = $teamID->fetch_row();
            $newTeamID1 = $teamIDRow[0] + 1;
            $newTeamID2 = $teamIDRow[0] + 2;
            print_r($newTeamID2);
            $sqlRiotMatch = "INSERT INTO riot_match (gameID, Duration, gameMode, RegionCode)
                             VALUES ($newGameID, $duration, '$gameMode', '$regionCode')";
            $InsertRiotMatch = $conn->query($sqlRiotMatch);
            if ($InsertRiotMatch) {
                print_r("match inserted");
            } else {
                print_r("match failed");
            }

            $firstBlood1;
            $firstBlood2;
            $matchWinner1;
            $matchWinner2;

            if ($firstBlood == '1') {
                $firstBlood1 = 1;
                $firstBlood2 = 0;
            } else {
                $firstBlood1 = 0;
                $firstBlood2 = 1;
            }
            if ($matchWinner == '1') {
                $matchWinner1 = 1;
                $matchWinner2 = 0;
            } else {
                $matchWinner1 = 0;
                $matchWinner2 = 1;
            }

            $sqlTeam1 = "INSERT INTO team
                        VALUES ($newTeamID1, $newGameID, $firstBlood1, $matchWinner1)";
            $insertTeam1 = $conn->query($sqlTeam1);

            $sqlTeam2 = "INSERT INTO team
                        VALUES ($newTeamID2, $newGameID, $firstBlood2, $matchWinner2)";
            $insertTeam2 = $conn->query($sqlTeam2);

            if ($insertTeam1) {
                print_r("team1 inserted");
            } 
            if ($insertTeam2) {
                print_r("team2 inserted");
            }
            else {
                print_r("team failed");
            }
            $sqlLeaguePlayer = "INSERT INTO leagueplayer
                                VALUES ($pIDMax+1, $newGameID, $newTeamID1, $kills1, $resource1, $assists1, $deaths1, '$role1', $vision1, $level1),
                                        ($pIDMax+2, $newGameID, $newTeamID1, $kills2, $resource2, $assists2, $deaths2, '$role2', $vision2, $level2),
                                        ($pIDMax+3, $newGameID, $newTeamID1, $kills3, $resource3, $assists3, $deaths3, '$role3', $vision3, $level3),
                                        ($pIDMax+4, $newGameID, $newTeamID1, $kills4, $resource4, $assists4, $deaths4, '$role4', $vision4, $level4),
                                        ($pIDMax+5, $newGameID, $newTeamID1, $kills5, $resource5, $assists5, $deaths5, '$role5', $vision5, $level5),
                                        ($pIDMax+6, $newGameID, $newTeamID2, $kills6, $resource6, $assists6, $deaths6, '$role6', $vision6, $level6),
                                        ($pIDMax+7, $newGameID, $newTeamID2, $kills7, $resource7, $assists7, $deaths7, '$role7', $vision7, $level7),
                                        ($pIDMax+8, $newGameID, $newTeamID2, $kills8, $resource8, $assists8, $deaths8, '$role8', $vision8, $level8),
                                        ($pIDMax+9, $newGameID, $newTeamID2, $kills9, $resource9, $assists9, $deaths9, '$role9', $vision9, $level9),
                                        ($pIDMax+10, $newGameID, $newTeamID2, $kills10, $resource10, $assists10, $deaths10, '$role10', $vision10, $level10)";
            $insertLP = $conn->query($sqlLeaguePlayer);
            if ($insertLP) {
                print_r("lp inserted");
            } else {
                print_r ("error");
            }
            $sqlISA = "INSERT INTO Isa
                    VALUES($pIDMax+1, '$name1'),
                    ($pIDMax+2, '$name2'),
                    ($pIDMax+3, '$name3'),
                    ($pIDMax+4, '$name4'),
                    ($pIDMax+5, '$name5'),
                    ($pIDMax+6, '$name6'),
                    ($pIDMax+7, '$name7'),
                    ($pIDMax+8, '$name8'),
                    ($pIDMax+9, '$name9'),
                    ($pIDMax+10, '$name10')";
            $insertISA = $conn->query($sqlISA);
            if ($insertISA) {
                print_r("ISA inserted");
            } else {
                print_r("error");
            }

            $sqlChampionPlayed = "INSERT INTO ChampionPlayed
                                    VALUES('$champ1', $pIDMax+1),
                                    ('$champ2', $pIDMax+2),
                                    ('$champ3', $pIDMax+3),
                                    ('$champ4', $pIDMax+4),
                                    ('$champ5', $pIDMax+5),
                                    ('$champ6', $pIDMax+6),
                                    ('$champ7', $pIDMax+7),
                                    ('$champ8', $pIDMax+8),
                                    ('$champ9', $pIDMax+9),
                                    ('$champ10', $pIDMax+10)";
            $insertChampPlayed = $conn->query($sqlChampionPlayed);
            if ($insertChampPlayed) {
                print_r("ChampPlayed inserted");
            } else {
                print_r("error");
            }                        
        }
        
        // make 10 ChampionPlayed

        function handleInsertRequest() {
            $conn = OpenCon(); 
            $a = $_POST['insName'];
            $b = $_POST['insAD'];
            $c = $_POST['insAP'];
            $d = $_POST['insAS'];
            $e = $_POST['insHealth'];
            $f = $_POST['insMana'];
            $g = $_POST['insArmour'];
            $h = $_POST['insMR'];
            $i = $_POST['insCritChance'];
            $j = $_POST['insAH'];
            $k = $_POST['insLifesteal'];
            $l = $_POST['insOmnivamp'];
            $m = $_POST['insHR'];
            $n = $_POST['insManaR'];
            $o = $_POST['insMovespeed'];
            $p = $_POST['insCost'];
                        
            $sql = "INSERT INTO Item (name, Attack_Damage, Ability_Power, Attack_speed, Health, Mana, Armour, Magic_Resist, Crit_Chance, Ability_Haste, Lifesteal, Omnivamp, Health_Regen, Mana_Regen, Movespeed, cost)
                    VALUES ('$a', '$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')";
            $result = $conn->query($sql);
        }
        
        function handleDisplayRequest() {
            $conn = OpenCon();
            $id = $_GET['tableName'];
            $sql = "SELECT * FROM $id";
            $result = $conn->query($sql);
            echo "<h2> $id </h2>";
            printResults($result);
        }

        function handleDeleteRequest() {
            $conn = OpenCon();
            $champion = $_POST['delChamp'];
            $sql = "DELETE FROM riot_match WHERE gameID = '".$champion."'";
            if ($conn->query($sql) === TRUE) {
                echo "Deleted";
            } else {
                echo "Error Deleting";
            }
        }

        function handleUpdateRequest() {
            $conn = OpenCon();
            $dataTable = $_POST['updateTableName'];
            $set = $_POST['updateSet'];
            $input1 = $_POST['updateInput1'];
            $where = $_POST['updateWhere'];
            $input2 = $_POST['updateInput2'];

            $sql = "UPDATE $dataTable 
                    SET ".$set." = $input1
                    WHERE ".$where." = '".$input2."'";

            if ($conn->query($sql) === TRUE) {
                echo "Updated";
            } else {
                echo "Error updating";
            }
        }

        function handleSelectRequest() {
            $conn = OpenCon();
            $deaths = $_GET['deaths'];
            $assists = $_GET['assists'];
        
            $sql = "SELECT Kills, ResourceEarned FROM leagueplayer
                    WHERE Deaths < $deaths AND Assists > $assists ";
            $result = $conn->query($sql);
            printResults($result);

        }

        function handleProjectRequest() {
            $conn = OpenCon();
            if (isset($_GET['projectTable'])){
                if($_GET['projectTable'] == 'Item'){
                    $result = $conn->query("SELECT name, Attack_Damage, Ability_Power, Armour, Magic_Resist FROM Item");
                    if (!empty($result) && $result->num_rows > 0) {
                        echo "<table>";
                        echo "<tr><th>Name</th><th>Attack Damage</th><th>Ability Power</th><th>Armour</th><th>Magic Resist</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["Attack_Damage"] . "</td>
                            <td>" . $row["Ability_Power"] . "</td>
                            <td>" . $row["Armour"] . "</td>
                            <td>" . $row["Magic_Resist"] . "</td>
                            </tr>";
                        }
                        echo "</table>";
                    }
                } else if ($_GET['projectTable'] == 'League Player'){
                    $result = $conn->query("SELECT ParticipantID, Kills, Deaths, Assists, Role FROM LeaguePlayer");
                    if (!empty($result) && $result->num_rows > 0) {
                        echo "<table>";
                        echo "<tr><th>Participant ID</th><th>Kills</th><th>Deaths</th><th>Assists</th><th>Role</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["ParticipantID"] . "</td>
                            <td>" . $row["Kills"] . "</td>
                            <td>" . $row["Deaths"] . "</td>
                            <td>" . $row["Assists"] . "</td>
                            <td>" . $row["Role"] . "</td>
                            </tr>";
                        }
                        echo "</table>";
                    }
                } else if ($_GET['projectTable'] == 'Champion'){
                    $result = $conn->query("SELECT championName, Attack_Damage, Attack_Speed, Health, Mana FROM Champion");
                    if (!empty($result) && $result->num_rows > 0) {
                        echo "<table>";
                        echo "<tr><th>Name</th><th>Attack Damage</th><th>Attack Speed</th><th>Health</th><th>Mana</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["championName"] . "</td>
                            <td>" . $row["Attack_Damage"] . "</td>
                            <td>" . $row["Attack_Speed"] . "</td>
                            <td>" . $row["Health"] . "</td>
                            <td>" . $row["Mana"] . "</td>
                            </tr>";
                        }
                        echo "</table>";
                    }
                }
            }
            
        }

        function handleJoinRequest() {
            $conn = OpenCon();
            $champion = $_GET['joinChamp'];
            $sql = "SELECT Kills, Deaths, Assists, Final_Level, ResourceEarned, Vision_Score, Role
                    FROM LeaguePlayer, ChampionPlayed, Champion
                    WHERE ChampionPlayed.championName = Champion.championName AND
                            Champion.championName = '".$champion."' AND
                            ChampionPlayed.ParticipantID = LeaguePlayer.ParticipantID";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Kills</th><th>Deaths</th><th>Assists</th><th>Final Level</th><th>Resources Earned</th><th>Vision Score</th><th>Role</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["Kills"] . "</td>
                    <td>" . $row["Deaths"] . "</td>
                    <td>" . $row["Assists"] . "</td>
                    <td>" . $row["Final_Level"] . "</td>
                    <td>" . $row["ResourceEarned"] . "</td>
                    <td>" . $row["Vision_Score"] . "</td>
                    <td>" . $row["Role"] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Champion Name not found";
            }
        }

        function handleAggregationWithGroupBy() {
            $conn = OpenCon();
            $sql = "SELECT Max(Kills), Role
                    FROM LeaguePlayer
                    GROUP BY Role";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Max Kills</th><th>Role</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["Max(Kills)"] . "</td>
                    <td>" . $row["Role"] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Error";
            }
        }

        function handleAggregationWithHaving() {
            $conn = OpenCon();
            $sql = "SELECT ParticipantID, Kills, Avg(Deaths)
                    FROM LeaguePlayer
                    GROUP by ParticipantID
                    Having Kills > 5";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Participant ID</th><th>Kills</th><th>Average Deaths</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["ParticipantID"] . "</td>
                    <td>" . $row["Kills"] . "</td>
                    <td>" . $row["Avg(Deaths)"] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Error";
            }
        }
        
        function handleNestedAggregation() {
            $conn = OpenCon();
            $sql = "SELECT Temp.ParticipantID, Temp.Kills, Temp.minDeaths, Temp.Role
                    FROM (SELECT ParticipantID, Kills, MIN(Deaths) minDeaths, Role
                            FROM LeaguePlayer 
                            GROUP BY Role) AS Temp
                    WHERE Temp.minDeaths < 5";

            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Participant ID</th><th>Kills</th><th>Deaths</th><th>Role</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["ParticipantID"] . "</td>
                    <td>" . $row["Kills"] . "</td>
                    <td>" . $row["minDeaths"] . "</td>
                    <td>" . $row["Role"] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Error";
            }
        }

        function handleDivision() {
            $conn = OpenCon();
            $sql = "SELECT IA.SummonerName FROM LeaguePlayer LP, Isa IA WHERE IA.participantID = LP.participantID AND NOT EXISTS ((SELECT I.name FROM Item I WHERE I.Omnivamp > 0) EXCEPT (SELECT B.ItemName FROM Bought B WHERE B.participantID = LP.participantID))";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Summoner Name</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["SummonerName"] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Error";
            }
        }        

        function printResults($result) {
            if (!empty($result) && $result->num_rows > 0) {
                echo "<table>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach($row as $value) {
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

		?>
	</body>
</html>

