#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	int count = 0, started = 0;
	for (int i = str.length() - 1; i >= 0; i--)
	{
		if (str[i]!=32)
		{
			started = 1;
			count++;
		}
		else
		{
			if (started || i == 0)break;
		}
	}
	cout << count;
}