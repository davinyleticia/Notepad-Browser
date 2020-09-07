# Notepad Browser


![Tag informação: Linguagem PHP](https://img.shields.io/badge/Linguagem-PHP-blue) ![Tag informação: Banco de dados mysql](https://img.shields.io/badge/DB-File-brightgreen) ![Tag informação: Nível do projeto - start junior](https://img.shields.io/badge/N%C3%ADvel%20do%20Projeto-Necessidade-yellow)


[@github/davinyvidal](https://github.com/davinyvidal/)

[@github/davinyvidal/Notepad-Browser](https://github.com/davinyvidal/Notepad-Browser)


## 🚀 Objetivo
Mostrar parte por parte do processo de instalação manual


## 📓 Script de instalação manual

⚙️ Primeiro você tem que instalar o Apache e PHP 7.X

```bash
sudo apt install update
sudo apt install upgrade
sudo apt install apache2
sudo apt install php
sudo apt install nano
```

⚙️ Clone do Projeto

```bash
cd /opt/
sudo git clone git@github.com:davinyvidal/Notepad-Browser.git
sudo chmod 777 -R /opt/Notepad-Browser/all/
cd Notepad-Browser
```

⚙️ Depois você move os três arquivo usando o comando abaixo

```bash
sudo cp file.notepad.conf.exemplo /etc/apache2/sites-available/file.notepad.conf | sudo cp create.notepad.conf.exemplo /etc/apache2/sites-available/create.notepad.conf | sudo cp link.notepad.conf.exemplo /etc/apache2/sites-available/link.notepad.conf
```

⚙️ Acrescenta no /etc/apache2/apache2.conf No final do arquivo.

```bash
sudo nano /etc/apache2/apache2.conf
```
```bash
Options Indexes FollowSymLinks
AllowOverride None
Require all granted
```

Para salvar ctrl+O e depois ctrl+X

⚙️ Acrescenta no /etc/hosts

```bash
sudo nano /etc/hosts
```

```bash
127.0.0.1 create.notepad
127.0.0.1 link.notepad
127.0.0.1 file.notepad
```

⚙️ Ativando a .conf

```bash
sudo a2ensite file.notepad.conf
sudo a2ensite create.notepad.conf
sudo a2ensite link.notepad.conf
```

⚙️ Restart do serviço Apache2

```bash
sudo service apache2 restart
```

⚙️ Link simbolico

```bash
ln -s /opt/Notepad-Browser/all/ ~/Files
```


## 📜 Lincença:

####  📢 Licença Pública Geral GNU v3.0
As permissões desta licença copyleft forte estão condicionadas a disponibilizar o código fonte completo das obras e modificações licenciadas, que incluem obras maiores usando uma obra licenciada, sob a mesma licença. Os avisos de direitos autorais e licença devem ser preservados. Os colaboradores fornecem uma concessão expressa de direitos de patente.

#### 👩 Considerações finais
Sistema feito 💜 pela Daviny Vidal.

Github @github/davinyvidal
