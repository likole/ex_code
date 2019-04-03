#include<iostream>
#include<string>
#include<map>
using namespace std;
int main()
{
	string a, b;
	while (cin >> a >> b)
	{
		map<char, int> aMap;
		map<char, int> bMap;
		for (char i = 'a'; i <= 'z'; i++)
		{
			aMap[i] = 0;
			bMap[i] = 0;
		}
		for (int i = 0; i < a.length(); i++)
		{
			aMap[a[i]]++;
		}
		for (int i = 0; i < b.length(); i++)
		{
			bMap[b[i]] ++ ;
		}
		int flag = 1;
		for (char i = 'a'; i <= 'z'; i++)
		{
			if (aMap[i] != bMap[i])
			{
				flag = 0;
				break;
			}
		}
		if (flag) cout << "Yes\n";
		else cout << "No\n";
	}
}