#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s1, s2;
	getline(cin, s1);
	getline(cin, s2);
	if (s1 == s2)
		cout << '0' << endl;
	else
	{
		for (int i = 0; i<s1.length(); i++)
		{
			if (s1[i] != s2[i])
			{
				cout << (s1[i] - s2[i]) << endl;
				break;
			}
		}
	}
}