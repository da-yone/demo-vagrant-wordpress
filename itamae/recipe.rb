execute "yum -y update"
#execute "rpm -Uvh http://ftp.iij.ad.jp/pub/linux/fedora/epel/6/x86_64/epel-release-6-8.noarch.rpm"
#execute "rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm"

package "httpd"
package "mysql-server"
package "unzip"
%w(php php-devel php-mbstring php-mysqlnd php-gd php-xml).each do |pkg|
  package pkg do
    options "--enablerepo=remi"
  end
end

remote_file '/etc/httpd/conf.d/wordpress.conf' do
  mode '644'
  owner 'root'
  group 'root'
end

execute "download and extract wordpress" do
  commands = [
    #"mkdir /vagrant/www",
    "cd /vagrant/www/",
    #"wget \"https://ja.wordpress.org/latest-ja.zip\"",
    #"unzip latest-ja.zip",
    #"rm -rf latest-ja.zip",
    #"chown -R apache:apache wordpress"
  ]
  command commands.join(" && ")
  user "root"
end

remote_file '/etc/httpd/conf.d/wordpress.conf' do
  mode '644'
  owner 'root'
  group 'root'
end

remote_file '/vagrant/www/wordpress/wp-config.php' do
  mode '644'
  owner 'apache'
  group 'apache'
end

%w(httpd mysqld).each do |sv|
  service sv do
    action [:start, :enable]
  end
end

# execute "mysql -uroot -e \"SET PASSWORD=PASSWORD('root')\""
execute "mysql -uroot -proot -e \"CREATE DATABASE IF NOT EXISTS wordpress character set utf8\""