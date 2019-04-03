#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int count = 0;
	for (int i = 0; i < 3; i++)
	{
		getline(cin, str);
		for (int j = 0; j < str.length(); j++)
		{
			if (str[j] == ' ')count++;
		}
	}
	cout << count << endl;
	return 0;
}