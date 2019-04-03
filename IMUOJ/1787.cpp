#include<iostream>
#include<stack>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	for (int i = 0; i < n; i++)
	{
		stack <int> zhan;
		string str;
		getline(cin, str);
		int flag = 1;
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] == '(') zhan.push(0);
			else if (str[i] == '[') zhan.push(1);
			else if (str[i] == '{') zhan.push(2);
			else if (str[i] == ')')
			{
				if (!zhan.empty()&&zhan.top() == 0) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
			else if (str[i] == ']')
			{
				if (!zhan.empty()&&zhan.top() == 1) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
			else if (str[i] == '}')
			{
				if (!zhan.empty() && zhan.top() == 2) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
		}
		if (flag == 1 && zhan.empty())
			cout << "Yes\n";
		else cout << "No\n";
	}
}