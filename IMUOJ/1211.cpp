#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s;
	string code = "VWXYZABCDEFGHIJKLMNOPQRSTU";
	while (getline(cin, s))
	{
		if (s == "ENDOFINPUT")break;
		getline(cin, s);
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] >= 'A'&&s[i] <= 'Z') s[i] = code[s[i] - 65];
		}
		cout << s << endl;
		getline(cin, s);
	}
	
}