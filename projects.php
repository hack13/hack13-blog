<?php include('views/https.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HACK13 Site</title>
        <link rel="stylesheet" type="text/css" href="/assets/bootstrap.min.css"/>
    </head>
    <body>
        <?php include('views/navbar.php'); ?>
        <main role="main">
        <div class="container">
        <h1 class="mt-5">Projects</h1>
        <h3>Personal Projects:</h3>
        <div class="container">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">About</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Link(s)</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Tier 2 Virginia OpenNIC Resolvers</th>
                        <td>Two OpenNIC Public Tier 2 resolvers with DoH(DNS over HTTPS) support for anyone to use.</td>
                        <td><span class="badge badge-info">DNS</span> <span class="badge badge-info">Service</span></td>
                        <td>
                            <a href="/projects/opennic" class="btn btn-secondary"><i class="fas fa-link"></i></a> 
                        </td>
                        <td><h4><span class="badge badge-primary">Maintained</span></h4></td>
                    </tr>
                    <tr>
                        <th scope="row">CyberWrld Grid</th>
                        <td>Free public grid used for testing and development of software and tools.</td>
                        <td><span class="badge badge-info">OpenSimulator</span> <span class="badge badge-info">Service</span></td>
                        <td>
                            <a href="/projects/cyberwrld" target="_blank" class="btn btn-secondary"><i class="fas fa-link"></i></a> 
                        </td>
                        <td><h4><span class="badge badge-danger">Alpha</span></h4></td>
                    </tr>
                    <tr>
                        <th scope="row">Ansible OpenNIC Setup</th>
                        <td>Simple Ansible Playbook to install and configure an OpenNIC Tier 2 node on multiple distributions of Linux.</td>
                        <td><span class="badge badge-info">Ansible Playbook</span> <span class="badge badge-info">Automation</span></td>
                        <td>
                            <a href="https://github.com/hack13/ansible-opennic-setup" target="_blank" class="btn btn-secondary"><i class="fab fa-github"></i></a> 
                        </td>
                        <td><h4><span class="badge badge-primary">Maintained</span></h4></td>
                    </tr>
                    <tr>
                        <th scope="row">Ansible OpenSim Grid</th>
                        <td>Grid Setup for OpenSim using Ansible on CentOS 7</td>
                        <td><span class="badge badge-info">Ansible Playbook</span> <span class="badge badge-info">Automation</span></td>
                        <td>
                            <a href="https://github.com/hack13/ansible-opensim-grid" target="_blank" class="btn btn-secondary"><i class="fab fa-github"></i></a> 
                        </td>
                        <td><h4><span class="badge badge-primary">Maintained</span></h4></td>
                    </tr>
                    <tr>
                        <th scope="row">OpenSim Libre Panel</th>
                        <td>OpenSimulator Standalone/Grid Management System</td>
                        <td><span class="badge badge-info">PHP</span> <span class="badge badge-info">SQL</span></td>
                        <td>
                            <a href="https://github.com/hack13/opensim-libre-panel" target="_blank" class="btn btn-secondary"><i class="fab fa-github"></i></a> 
                        </td>
                        <td><h4><span class="badge badge-info">Work In Progress</span></h4></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>
    </body>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"><i class="far fa-copyright"></i>HACK13<i>(Timothy Rogers)</i></span>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    </footer>
</html>