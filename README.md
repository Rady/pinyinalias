#Joomla中文拼音别名插件

##插件简介：

在使用Joomla过程中，如果文章的别名不填写，Joomla默认使用日期产生一个“2012-08-10-06-46-37”格式的符串作为别名，这样的别名不美观也不利于SEO。

我们的这个插件自动将文章标题转为拼音作为默认别名。

如果你在新建文章时填写了别名，插件将不会对填写的别名造成影响。如果你想在旧文章中使用这个插件，请在编辑文章时清空原有的别名，然后保存文章，插件将使用标题的中文转为拼音作为别名。

感谢 William Long [WordPress中文标题转换拼音插件][]

##插件安装：

插件的下载地址是：https://github.com/Rady/pinyinalias

作者：Rady Huang ，http://www.radys.cn

#Joomla plugin: Chinese PinYin Alias

The Chinese PinYin Alias Joomla plugin convert Chinese UTF-8 character into English PinYin character from a post slugs to improve search engine optimization.
For example, when you publish a post with a title like this:
"中文拼音"
Joomla automatically assigns a alias like this:
"2012-08-10-06-46-37"
PinYin Alias plugin convert Chinese character into PinYin character. With Chinese PinYin Alias enable, the alias for our example artilcle would look like this:
"zhongwenpinyin"
The alias is generated on saving a post (so you get a chance to look at it before publishing, and change it), or on publish. It won't overwrite an existing alias. You can force a new alias generation by deleting the existing one.

##Installation

Download the PinYin Alias Plugin .zip package. 

Extension -> Extentsion Manager -> Upload Package File 

Click 'Upload & Install'

##Enable Pinyin Alias Plugin

Extentsion -> Plug-in Manager Enter 'Pinyin Alias', and click 'Search', enable the plugin.

[WordPress中文标题转换拼音插件]: http://www.williamlong.info/archives/1027.html