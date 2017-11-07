#install

apt_package "nginx-extras" do
action :install
end

apt_package "php-fpm" do
action :install
end

apt_package "php-mysql" do
action :install
end