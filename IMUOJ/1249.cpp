#include<iostream>
#include<sstream>
#include<string>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	for (int i = a; i <= b; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0) flag++;
		}
		if (flag == 1)
		{
			stringstream ss;
			string num,tmp;
			ss << i;
			ss >> num;
			tmp = num;
			for (int j = 0; j < num.length(); j++)
			{
				tmp[j] = num[num.length() - 1 - j];
			}
			if (tmp == num)cout << i << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}