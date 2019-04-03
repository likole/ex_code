#include<iostream>
#include<string>
#include<sstream>
using namespace std;
void replaceall(string &s, string reg, string replacement)
{
	int len = reg.length();
	while (s.find(reg) < s.length())
	{
		s.replace(s.find(reg), len, replacement);
	}
}
int main()
{
	string s;
	while (getline(cin, s,'#'))
	{
		replaceall(s, ":", " sign ");
		replaceall(s, ",", " sign ");
		replaceall(s, "+", " sign ");
		replaceall(s, "-", " sign ");
		replaceall(s, ".", " sign ");
		stringstream ss(s);
		string sub;
		int count = 0;
		while (ss >> sub)
		{
			count++;
		}
		if (count)
		{
			cout << count << endl;
		}
	}
}
