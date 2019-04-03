#include<iostream>
#include<string>
using namespace std;
int main()
{
	int count[6] = { 0 ,0,0,0,0,0 };
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		switch (str[i])
		{
		case '(':
			count[0]++;
			break;
		case ')':
			count[1]++;
			break;
		case '[':
			count[2]++;
			break;
		case ']':
			count[3]++;
			break;
		case '{':
			count[4]++;
			break;
		case '}':
			count[5]++;
			break;
		}
	}
	for (int i = 0; i < 6; i++)
	{
		cout << count[i];
		if (i != 5)cout << " ";
	}
}