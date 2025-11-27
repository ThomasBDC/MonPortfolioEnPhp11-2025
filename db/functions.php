<?php
    require_once 'db_connect.php';
    function getAllProjects(){
        $pdo = getDBConnection();
                    
        $sql = "SELECT * FROM my_portfolio_php.projects proj
                LEFT JOIN my_portfolio_php.projects_skills projski ON proj.idprojects = projski.idproject
                LEFT JOIN my_portfolio_php.skills ON skills.idskills = projski.idskill;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $projects = [];

        foreach($result as $row){

            //Si mon projet n'est pas encore dans le tableau 
            if(isset($projects[$row['idprojects']]) == false)
            {
                $project = [
                    'title' => $row['title'],
                    'description' => $row['description'],
                    'github_link' => $row['github_link'],
                    'project_link' => $row['project_link'],
                    'skills' => []
                ];
                $projects[$row['idprojects']] = $project;
            }
            
            //un skill est présent dans la row ? 
            if(isset($row['idskills'])){
                //je veux ajouter le skill dans le tableau skill
                $projects[$row['idprojects']]['skills'][] = $row['name'];
            }
        }

        return $projects;
    }

    function getAllSkills(){
        $pdo = getDBConnection();

        $sql = "SELECT * FROM my_portfolio_php.skills;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function echoValue($row, $name){
        echo htmlspecialchars($row[$name], ENT_QUOTES, 'UTF-8') . "\t";
    }
?>