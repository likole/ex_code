#include<iostream>
#include<string>
#include<sstream>
using namespace std;
string express[10] = { "零","壹","贰","叁","肆","伍","陆","柒","捌","玖" };
string suffix[13] = { "元","拾","佰","仟","万","拾","佰","仟","亿","拾","佰","仟","万" };
int is_int(double);
void process(double x, string &s);
void process_pre(double x, string &s);
void process_suf(double x, string &s);
void replaceAll(string &src, string regex, string replacement);
void clean(string &s);
void special(string &s);
int main()
{
	double n;
	while (cin >> n)
	{
		string ans;
		process(n, ans);
		cout << ans << endl;
	}
}
int is_int(double x)
{
	long long int n = (long long int)x;
	if (n == x)return 1;
	return 0;
}
void process(double x, string &s)
{
	process_pre(x, s);
	clean(s);
	special(s);
	if (is_int(x))
	{
		s += "整";
	}
	else
	{
		process_suf(x, s);
	}
	replaceAll(s, "零角", "");
	replaceAll(s, "零分", "");
}
void process_pre(double x, string &s)
{
	long long int n = (long long int)x;
	stringstream ss;
	string num;
	ss << n;
	ss >> num;
	for (int i = 0; i < num.length(); i++)
	{
		s = s + express[num[i] - 48] + suffix[num.length() - 1 - i];
	}
}
void process_suf(double x, string &s) 
{
	x *= 100;
	long long int n = (long long int)x;
	s += express[n / 10 % 10] + "角" + express[n % 10] + "分";
}
void replaceAll(string &src, string regex, string replacement)
{
	int length = regex.length();
	while (src.find(regex) < src.length()) {
		src.replace(src.find(regex), length, replacement);
	}
}
void clean(string &s)
{
	string regex1[] = { "零仟", "零佰", "零拾" };
	string regex2[] = { "零亿", "零万", "零元" };
	string regex3[] = { "亿", "万", "元" };
	for (int i = 0; i < 3; i++) {
		replaceAll(s, regex1[i], "零");
	}
	for (int i = 0; i < 3; i++) {
		replaceAll(s, "零零零", "零");
		replaceAll(s, "零零", "零");
		replaceAll(s, regex2[i], regex3[i]);
	}
	replaceAll(s, "亿万", "亿");
}
void special(string &s)
{
	if (s == "元") s = "零元";
	else if (s == "壹拾元")s = "拾元";
}