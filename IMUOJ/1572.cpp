#include<iostream>
#include<string>
using namespace std;
int main()
{
	string present[10] = { "0000","0001","0010","0011","0100","0101","0110","0111","1000","1001" };
	string str;
	while (getline(cin, str))
	{
		for (int i = 0; i < str.length(); i++)
		{
			cout << present[str[i] - 48];
		}
		cout << endl;
	}
}