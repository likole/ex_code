#include<iostream>
#include<string>
#include<set>
#include<map>
#include<algorithm>
using namespace std;
string s[1000];
string s_std[1000];
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> s[i];
			s_std[i] = s[i];
			sort(&s_std[i][0], &s_std[i][0] + s_std[i].length());
		}
		map<string,int> tmp;
		set<string> result;
		for (int i = 0; i < n; i++)
		{
			if (!tmp.count(s_std[i])) tmp[s_std[i]] = 0;
			tmp[s_std[i]]++;
		}
		for (int i = 0; i < n; i++)
		{
			if (tmp[s_std[i]] == 1) result.insert(s[i]);
		}
		if (result.empty()) cout << "None";
		else
		{
			int i = 0;
			int len = result.size();
			for (set<string>::iterator it = result.begin(); it != result.end(); ++it)
			{
				cout << *it;
				i++;
				if (i != len) cout << " ";
			}
		}
		cout << endl;
	}
}