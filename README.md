## Instalacja
1. wejscie na serwer ssh 201075@sokrates.edu.jkan.pl
2. umieszczenie tam plikow z repo
4. "eval \`ssh-agent\`" w terminalu
5. "ssh ec2-user@<ip_maszyny> -i id_student" dla obu adresow ip
6. "ssh-add id_student"
7. "ansible-playbook -i hosts.ini setup_wp.yaml -e DB_PW='hasło'" wlaczenie samej aplikacji
8. dalej konfiguracja wordpressa z kokpitu (widocznego na screenshocie)

![screenshot z wordpressa](screenik.png "wordpress działa!")
