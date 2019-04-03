#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int ans=0;
	while (cin>>str)
	{
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] == '$') ans++;
		}
	}
	cout << ans << endl;
	return 0;
}